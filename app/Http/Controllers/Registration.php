<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Torann\GeoIP\Facades\GeoIP;
use App\User;
use App\Points;
use App\Plants;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Registration extends BaseController {

    public function signup(Request $request) {

        $name = $request->username;
        $desc = $request->desc;
        $pwd = $request->pass;
        $request->session()->flash('status', $name . ', Welcome to GROVR!');

        $user = new User;
        $user->name = $name;
        $user->password = bcrypt($pwd);
        $user->lat = "0.000";
        $user->logi = "120.000";
        $user->team = "Red";
        $user->avator = "avetor";
        $user->desc = $desc;
        //$user->save();

        $this->setNameSession($name, $request);
        return view('/login')->with('name', $name);
    }

    public function login(Request $request) {
        $name = $request->username;
        $pwd = $request->pwd;
        $user = User::where('name', $name)->first();
        $this->setNameSession($name, $request);
        if (Hash::check($pwd, $user->password)) {
            $points = Points::where('user_id', $user->id)->first();
            $user_data = array('team' => $user->team, 'points' => $points->points, 'teamp' => $points->teampoints, 'ratings' => $points->rating);

            $clinet_ip = GeoIP::getLocation($request->ip());
            $client = new Client();
            $temp_city = "Kualalumpur"; // for temp
            $response = $client->get('http://api.openweathermap.org/data/2.5/forecast?id=524901&APPID=858b33f941b1376532ede45000916b46&q=' . $temp_city);
            $body = json_decode($response->getBody(), TRUE);
            //$content = view('retrieve')->with('body', $body);
            //return $body;//$body['message'];
            if (!$body['cod'] == 200) {
                return "API failed";
            }
            $plant1 = Plants::find(1);
            $plant2 = Plants::find(2);
            $plant3 = Plants::find(3);

            $root = $body['list'][0];
            $main = $body['list'][0]['main'];
            $weather = $body['list'][0]['weather'][0];
            $wind = $body['list'][0]['wind'];
            $date = $root['dt_txt'];
            $temp_pass_temperature = $main['temp'] - 273.15;
            $ar_plats = $this->getPlants($temp_pass_temperature);
            $data = array('temp' => $main['temp'] - 273.15 . '°C', 'max_temp' => $main['temp_max'] - 273.15 . '°C',
                'temp_min' => $main['temp_min'] - 273.15 . '°C', 'pressure' => $main['pressure'], 'sea_level' => $main['sea_level'],
                'grnd_level' => $main['grnd_level'], 'humidity' => $main['humidity'], 'weather' => $weather['main'],
                'description' => $weather['description'], 'speed' => $wind['speed'], 'deg' => $wind['deg'], 'client_ip' => $clinet_ip,
                'date' => $date, 'plant_ar' => $ar_plats, 'user_data' => $user_data, 'plant1' => $plant1, 'plant2' => $plant2, 'plant3' => $plant3);

            return view('/landing', $data);
        } else {
            return "APi failed please try again!";
        }
    }

    public function setNameSession($name, Request $request) {
        $request->session()->put('name', $name);
    }

    public function getPlants($temp) {
        if ($temp < 25) {
            $plant_ar = array('plant1' => 'raddish.png', 'name1' => 'Raddish', 'plant2' => 'spider.png', 'name2' => 'Spider', 'plant3' => 'onion.png', 'name3' => 'Onion');
        } else if ($temp > 26) {
            $plant_ar = array('plant1' => 'aloe.png', 'name1' => 'Aloe', 'plant2' => 'onion.png', 'name2' => 'Onion', 'plant3' => 'spider.png', 'name3' => 'Spider');
        } else {
            $plant_ar = array('plant1' => 'spider.png', 'name1' => 'Spider', 'plant2' => 'aloe.png', 'name2' => 'Aloe', 'plant3' => 'spider.png', 'name3' => 'Spider');
        }
        return $plant_ar;
    }

    public function getLogout(Request $request) {
        Session::flush();
        $request->session()->flash('logout', 'Successfully Logged out!');
        return redirect('/login');
    }

}
