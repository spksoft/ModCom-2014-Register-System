<?php

class RegisterController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getid($id = null) {
		if(strlen($id) == 11) {
			if($id != null) {
				$user = DB::table('student_info')->where('student_id', $id)->first();
				if($user == null) return "NO"; 
				return Response::json($user);
			}
			return "NO";
		}
		return "ER";
	}

	public function savedata() {
		$data = Input::all();
		if(strcmp(App::make('RegisterController')->getid($data['student_id']), "NO") == 0 || $data['student_id'] == 'xxxxxxxxxxx') {
			$last_add = Student::orderby('id', 'desc')->first();
			if($last_add == null) {
				$group = 1;
			} else if((int)$last_add->group == 16) {
				$group = 1;
			} else {
				$group = $last_add->group + 1;
			}
			//return $last_add->group . " " . $group;
			//return substr($data['student_id'], 7, 2) . " " .(int)substr($data['student_id'], 9, 2);
			$student = new Student;
			$student->student_id = $data['student_id'];
			$student->id_section = substr($data['student_id'], 7, 2);
			$student->id_last = (int)substr($data['student_id'], 9, 2);
			$student->nickname = $data['nickname'];
			$student->name = $data['name_th'];
			$student->surname = $data['surname_th'];
			$student->name_en = $data['name_en'];
			$student->surname_en = $data['surname_en'];
			$student->age = $data['age'];
			$student->birthday = $data['birthday'];
			$student->address = $data['address'];
			$student->email = $data['email'];
			$student->hometel = $data['hometel'];
			$student->mobile = $data['mobile'];
			$student->group = $group;
			$student->ailment = $data['ailment'];
			$student->allergies = $data['allergies'];
			$student->save();
			return View::make('webcam', array('student_id' => $data['student_id']));
			/*DB::insert('insert into student_info (`id`, `student_id`, `nickname`, `name`, `surname`, `age`, `birthday`, `address`, `email`, `hometel`, `mobile`, `ailment`, `allergies`, `pic`, `group`) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array(null, $data['stdid'], $data['nickname'], $data['name'], ));
			*/
		}
		$data = array('title' => "Error", 'message' => $data['student_id']);
        return $data;
		//return View::make('error');
	}

	public function writeimg() {
		/*$myPublicFolder = public_path();
		$savePath = $myPublicFolder."/photo";
		$path = $savePath."/filename.txt";
		File::put($path , "1111");
		return $path; */
		$data = Input::all();
		$img = $data['imgdata'];
		$student_id = $data['student_id'];
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$imgdat = base64_decode($img);
		$myPublicFolder = public_path();
		$savePath = $myPublicFolder."/photo";
		$path = $savePath."/$student_id.png";
		File::delete($path);
		File::put($path , $imgdat);
		$last_add = Student::orderby('id', 'desc')->first();
		Student::where('student_id', '=', $student_id)->update(array('pic' => "$student_id.png"));
		return View::make('finish', array('imgid' => Student::where('student_id', '=', $student_id)->firstOrFail()->group));
	}

	public function report_id() {
		$users = DB::table('student_info')->get();
		$result = "";
		$i = 1;
		foreach($users as $user) {
			if($user->group == 1) $group = 'เอดโพแดง';
			else if ($user->group == 2) $group = 'เอดโพดำ';
			else if ($user->group == 3) $group = 'เอดดอกจิก';
			else if ($user->group == 4) $group = 'เอดข้าวหลาม';
			else if ($user->group == 5) $group = 'แจ็คโพแดง';
			else if ($user->group == 6) $group = 'แจ็คโพดำ';
			else if ($user->group == 7) $group = 'แจ็คดอกจิก';
			else if ($user->group == 8) $group = 'แจ็คข้าวหลามตัด';
			else if ($user->group == 9) $group = 'คิงโพแดง';
			else if ($user->group == 10) $group = 'คิงโพดำ';
			else if ($user->group == 11) $group = 'คิงดอกจิก';
			else if ($user->group == 12) $group = 'คิงข้าวหลามตัด';
			else if ($user->group == 13) $group = 'คิวโพแดง';
			else if ($user->group == 14) $group = 'คิวโพดำ';
			else if ($user->group == 15) $group = 'คิวดอกจิก';
			else if ($user->group == 16) $group = 'คิวข้าวหลามตัด';
			$result = $result . $i . " " . $user->student_id . "(". $user->sex .") Nickname : " . $user->nickname .' Name : ' . $user->name . " Lastname : " . $user->surname .  " โรค : " . $user->ailment . $user->allergies . ' Group : '. $group . "<br>";
			$i++;
		}
		return $result;
	}

	public function report_student_pok() {
		$qr = DB::select("select * from student_info where id_section = '10' order by id_last");
		$i = 1;
		$result = '';
		foreach ($qr as $user) {
			if($user->group == 1) $group = 'เอดโพแดง';
			else if ($user->group == 2) $group = 'เอดโพดำ';
			else if ($user->group == 3) $group = 'เอดดอกจิก';
			else if ($user->group == 4) $group = 'เอดข้าวหลาม';
			else if ($user->group == 5) $group = 'แจ็คโพแดง';
			else if ($user->group == 6) $group = 'แจ็คโพดำ';
			else if ($user->group == 7) $group = 'แจ็คดอกจิก';
			else if ($user->group == 8) $group = 'แจ็คข้าวหลามตัด';
			else if ($user->group == 9) $group = 'คิงโพแดง';
			else if ($user->group == 10) $group = 'คิงโพดำ';
			else if ($user->group == 11) $group = 'คิงดอกจิก';
			else if ($user->group == 12) $group = 'คิงข้าวหลามตัด';
			else if ($user->group == 13) $group = 'คิวโพแดง';
			else if ($user->group == 14) $group = 'คิวโพดำ';
			else if ($user->group == 15) $group = 'คิวดอกจิก';
			else if ($user->group == 16) $group = 'คิวข้าวหลามตัด';
			$result = $result . $i . " " . $user->student_id . "(". $user->sex .") Nickname : " . $user->nickname .' Name : ' . $user->name . " Lastname : " . $user->surname .  " โรค : " . $user->ailment . $user->allergies . ' Group : '. $group . "<br>";
			$i++;
		}
		return $result;
	}

	public function report_student_inter() {
		$qr = DB::select("select * from student_info where id_section = '34' order by id_last");
		$i = 1;
		$result = '';
		foreach ($qr as $user) {
			if($user->group == 1) $group = 'เอดโพแดง';
			else if ($user->group == 2) $group = 'เอดโพดำ';
			else if ($user->group == 3) $group = 'เอดดอกจิก';
			else if ($user->group == 4) $group = 'เอดข้าวหลาม';
			else if ($user->group == 5) $group = 'แจ็คโพแดง';
			else if ($user->group == 6) $group = 'แจ็คโพดำ';
			else if ($user->group == 7) $group = 'แจ็คดอกจิก';
			else if ($user->group == 8) $group = 'แจ็คข้าวหลามตัด';
			else if ($user->group == 9) $group = 'คิงโพแดง';
			else if ($user->group == 10) $group = 'คิงโพดำ';
			else if ($user->group == 11) $group = 'คิงดอกจิก';
			else if ($user->group == 12) $group = 'คิงข้าวหลามตัด';
			else if ($user->group == 13) $group = 'คิวโพแดง';
			else if ($user->group == 14) $group = 'คิวโพดำ';
			else if ($user->group == 15) $group = 'คิวดอกจิก';
			else if ($user->group == 16) $group = 'คิวข้าวหลามตัด';
			$result = $result . $i . " " . $user->student_id . "(". $user->sex .") Nickname : " . $user->nickname .' Name : ' . $user->name . " Lastname : " . $user->surname .  " โรค : " . $user->ailment . $user->allergies . ' Group : ' . $group ."<br>";
			$i++;
		}
		return $result;
	}
	public function showimg() {
		$users = DB::table('student_info')->get();
		$result = '';
		foreach ($users as $user) {
			$result = $result . "<img src='/photo/" . $user->pic . "' />" . $user->sex . " " . $user->student_id . '<br>';
		}
		return $result;
	}

}
