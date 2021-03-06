<?php

namespace Appoly\Payrun;

use Appoly\Payrun\HttpClient\PayRunHttpClient;

class Employers
{
	   public function __construct(){
			$this->payRunObject = new PayRunHttpClient();
	   }

	/**
	* create
	*This method create an employer in payrun.io 
	*@param $data is the incomming data , the data has all the post params
	*@param $response returns Response of Payrun.io
    */
    public function create($data)
    {
    
    	
    	$data = ['url' => 'Employers','method'=>'POST','data'=>$data];
    	return $this->payRunObject->call($data);
    }

    /**
     * PaySchedule
     * this method create a pay schedule for an employer
     * @param array $data     post data for payrun.io
     * @param String $employer employer id
     * @param String $response returns pay schedule id
     */
    public function PaySchedule($data,$employer){

        $data = ['method'=>'POST','data'=>$data];
        $data['url'] = 'Employer/'.$employer.'/PaySchedules';

        $response = $this->payRunObject->call($data);

        return $response;

        
    }
    
}
