<?PHP
	class License
	{
		private $secret = '';
		
		public function __construct()
		{
			
		}
		
		public function generateLiceseForArray($arr)
		{
			ksort($arr);
			$str = '';
			foreach($arr as $k => $v)
				$str .= $v;
			return strtoupper(md5($str . $this->secret));
		}
		
		public function validLicenseForArray($license, $array)
		{
			return ($license === $this->generateLiceseForArray($array));
		}
	}
