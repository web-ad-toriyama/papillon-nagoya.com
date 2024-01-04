<?php

class Validator
{
	/**
	 * Valitate rule setting
	 *
	 * @var array
	 */
	protected $_rules = array();

	/**
	 * The error message of the item used as an error is held as a result of an inspection.
	 *
	 * @var array
	 */
	protected $_errors;

	/**
	 * Default error messages.
	 *
	 * @var array
	 */
	protected static $_messages = array(
		'required'      => '必須項目です。',
		'required_arr'  => '必須選択項目です。',
		'length'        => '入力桁数をオーバーしています。',
		'length_range'  => 'Length is out of range.',
		'numeric'       => '数値のみ入力可能です。',
		'number_string' => 'Must be only with the numeric character.',
		'alpha'         => 'Must be only with the alphabet character.',
		'alphanum'      => 'Must be only with the alphabet or numeric character.',
		'singlebyte'    => 'Must be only with the single byte character.',
		'regex'         => 'It is an illegal character.',
		'email'         => 'メールアドレスの形式に誤りがあります。',
		'email_check'   => 'メールアドレスが一致していません。',
		'url'           => 'URLの形式に誤りがあります。',
		'tel'           => '電話番号の形式に誤りがあります。',
		'kana'          => 'カタカナのみ入力可能です。',
		'kana_em'       => '全角カタカナのみ入力可能です。',
		'file_ext'      => '拡張子の形式に誤りがあります。',
		'file_size'     => 'ファイルサイズが大きすぎます。',
		'dates'     => '日付の形式に誤りがあります。'
	);

	/**
	 * Set validate rule setting
	 *
	 * @param array $rules
	 * @return void
	 */
	public function setRules($rules)
	{
		if (!is_array($rules) && !($rules instanceof ArrayObject)) {
			throw new ArgumentInvalidException(__METHOD__, $rules, 1, 'array or ArrayObject');
		}
		$this->_rules = $rules;
	}

	/**
	 * Get the error message of the item used as an error by validation.
	 *
	 * @return array
	 */
	public function getError()
	{
		return $this->_errors;
	}

	/**
	 * Set default error messages
	 *
	 * @param array $messages
	 * @return void
	 */
	public static function setDefaultErrorMessage($messages)
	{
		if (!is_array($messages) && !($messages instanceof ArrayObject)) {
			throw new ArgumentInvalidException(__METHOD__, $messages, 1, 'array or ArrayObject');
		}
		foreach ($messages as $key => $message) {
			self::$_messages[$key] = $message;
		}
	}

	/**
	 * Execute validation for all of request values
	 *
	 * @param array $data Request data
	 * @return boolean
	 */
	public function validate($data)
	{
		foreach ($this->_rules as $item => $rules) {
			foreach ($rules as $ruleInfo) {
				$rule = $ruleInfo['rule'];
				$method = $this->_convert($rule, 2);
				if (!method_exists($this, $method)) {
					continue;
				}
				$message = '';
				if (isset($ruleInfo['error_message'])) {
					$message = $ruleInfo['error_message'];
				} elseif (isset(self::$_messages[$rule])) {
					$message = self::$_messages[$rule];
				}
				if ($message == '') {
					throw new Exception('Error message of rule "' . $rule . '" is not specified.');
				}
				$res = $this->$method($data[$item], $ruleInfo);
				if ($res == false) {
					foreach ($ruleInfo as $key => $val) {
						$message = str_replace('%' . $key . '%', $val, $message);
					}
					$this->_errors[$item] = $message;
					break;
				}
			}
		}
		if ($this->_errors) {
			return false;
		}
		return true;
	}

	/**
	 * Convert a string to case that specified by parameter
	 *
	 * @param string $name
	 * @param int $nameCase Naming convention
	 * @return string
	 */
	private function _convert($name, $nameCase)
	{
		$name = trim($name);
        $len = strlen($name);

		$words = array();
		$wordIndex = 0;
		for ($i = 0; $i < $len; $i++) {
            $char = substr($name, $i, 1);
            $lower = strtolower($char);
			if (isset($words[$wordIndex]) && $words[$wordIndex] != '') {
				if ($char == '_' || $char != $lower) {
					$wordIndex++;
				}
			}
			if ($char == '_' && $i > 0) {
				continue;
			}
			if (!isset($words[$wordIndex])) {
            	$words[$wordIndex] = '';
            }
			$words[$wordIndex] .= $lower;
		}

		$ret = '';
		if ($nameCase == 1) {
			$ret = implode('_', $words);
		} else {
			foreach ($words as $idx => $word) {
				if ($nameCase == 3 || $idx > 0) {
					$ret .= ucfirst($word);
				} else {
					$ret .= $word;
				}
			}
		}
		return $ret;
	}

	/**
	 * Execute validation of value required for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function required($value, $options)
	{
		// if (trim($value['name']) == '') {
		// 	return false;
		// }
		// return true;

		if(!is_array($value)){
			if (trim($value) == '') {
				return false;
			}
		} else {
			if (trim($value['name']) == '') {
				return false;
			}
		}
		return true;
	}

	
	public function requiredArr($value, $options)
	{
		if (is_null($value)) {
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of value email for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function email($value, $options)
	{
	    $wsp              = '[\x20\x09]'; // 半角空白と水平タブ
	    $vchar            = '[\x21-\x7e]'; // ASCIIコードの ! から ~ まで
	    $quoted_pair      = "\\\\(?:{$vchar}|{$wsp})"; // \ を前につけた quoted-pair 形式なら \ と " が使用できる
	    $qtext            = '[\x21\x23-\x5b\x5d-\x7e]'; // $vchar から \ と " を抜いたもの。\x22 は " , \x5c は \
	    $qcontent         = "(?:{$qtext}|{$quoted_pair})"; // quoted-string 形式の条件分岐
	    $quoted_string    = "\"{$qcontent}+\""; // " で 囲まれた quoted-string 形式。
	    $atext            = '[a-zA-Z0-9!#$%&\'*+\-\/\=?^_`{|}~]'; // 通常、メールアドレスに使用出来る文字
	    $dot_atom         = "{$atext}+(?:[.]{$atext}+)*"; // ドットが連続しない RFC 準拠形式をループ展開で構築
	    $local_part       = "(?:{$dot_atom}|{$quoted_string})"; // local-part は dot-atom 形式 または quoted-string 形式のどちらか
	    // ドメイン部分の判定強化
	    $alnum            = '[a-zA-Z0-9]'; // domain は先頭英数字
	    $sub_domain       = "{$alnum}+(?:-{$alnum}+)*"; // hyphenated alnum をループ展開で構築
	    $domain           = "(?:{$sub_domain})+(?:[.](?:{$sub_domain})+)+"; // ハイフンとドットが連続しないように $sub_domain をループ展開
	    $addr_spec        = "{$local_part}[@]{$domain}"; // 合成
	    // 昔の携帯電話メールアドレス用
	    $dot_atom_loose   = "{$atext}+(?:[.]|{$atext})*"; // 連続したドットと @ の直前のドットを許容する
	    $local_part_loose = $dot_atom_loose; // 昔の携帯電話メールアドレスで quoted-string 形式なんてあるわけない。たぶん。
	    $addr_spec_loose  = "{$local_part_loose}[@]{$domain}"; // 合成
		if (trim($value) != '') {
		    $regexp = $addr_spec_loose;
		    // \A は常に文字列の先頭にマッチする。\z は常に文字列の末尾にマッチする。
		    if(preg_match("/\A{$regexp}\z/", $value)){
		        return true;
		    }else{
		        return false;
		    }
		}
		return true;
	}

	/**
	 * Execute validation of value url for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function url($value, $options)
	{
		if (trim($value) != '') {
			if (filter_var($value, FILTER_VALIDATE_URL)) {
				return true;
			}
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of value tel for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function tel($value, $options)
	{
		if (trim($value) != '') {
			if (preg_match("/^([0-9]{2,})([0-9]{2,})([0-9]{2,4})$/", $value)) {
				return true;
			} else {
				return false;
			}
		}
		return true;
	}

	/**
	 * Execute validation of value kana for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function kana($value, $options)
	{
		if (trim($value) != '') {
			if(preg_match("/^[ァ-ヶｦ-ﾟー]+$/u",$value)){
				return true;
			}
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of value em kana for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function kanaEm($value, $options)
	{
		if (trim($value) != '') {
			if(preg_match("/^[ァ-ヶ]+$/u",$value)){
				return true;
			}
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of value mail check for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function emailCheck($value, $options)
	{
		if ($value != '' && $options['mail'] != '') {
			if ($value !== $options['mail']) {
				return false;
			}
		}
		return true;
	}

	/**
	 * Execute validation of value datetime for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function dates($value, $options)
	{
		if (trim($value) != '') {
			if($options['format'] == ''){
				$format = '%Y/%m/%d';
			}
			if(strptime($value,$format)){
				return true;
			}
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of value file extention for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function fileExt($value, $options)
	{
		if($value['name'] != ''){
			$ext = pathinfo(basename($value['name']), PATHINFO_EXTENSION);
			if(in_array($ext, $options['permit'])) {
				return true;
			} else {
				return false;
			}
		}
		return true;
	}

	/**
	 * Execute validation of value file size for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function fileSize($value, $options)
	{
		if($value['name'] != ''){
			if($value['size'] > $options['max']){
				return false;
			}
		}
		return true;
	}

	/**
	 * Execute validation of value max length for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function length($value, $options)
	{
		if ($value == '') {
			return true;
		}
		$len = 0;
		if (array_key_exists('encoding', $options)) {
			$len = mb_strlen($value, $options['encoding']);
		} else {
			$len = mb_strlen($value);
		}
		if (array_key_exists('max', $options) && $len > $options['max']) {
			return false;
		}
		if (array_key_exists('min', $options) && $len < $options['min']) {
			return false;
		}

		return true;
	}

	/**
	 * Execute validation of range of value length for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function lengthRange($value, $options)
	{
		return $this->length($value, $options);
	}

	/**
	 * Execute validation of numeric for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function numeric($value, $options)
	{
		if ($value == '') {
			return true;
		}
		if (!is_numeric($value)) {
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of number string for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function numberString($value, $options)
	{
		if ($value == '') {
			return true;
		}
		if (!preg_match('/^[0-9]+$/', $value)) {
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of alphabet for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function alpha($value, $options)
	{
		if ($value == '') {
			return true;
		}
		if (!preg_match('/^[a-zA-Z]+$/', $value)) {
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of alphabet or number string for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function alphaNum($value, $options)
	{
		if ($value == '') {
			return true;
		}
		if (!preg_match('/^[a-zA-Z0-9]+$/', $value)) {
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of singlebyte for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function singlebyte($value, $options)
	{
		if ($value == '') {
			return true;
		}
		$len = strlen($value);
		if (array_key_exists('encoding', $options)) {
			$mblen = mb_strlen($value, $options['encoding']);
		} else {
			$mblen = mb_strlen($value);
		}
		if ($len != $mblen) {
			return false;
		}
		return true;
	}

	/**
	 * Execute validation of reguler expression for a request value
	 *
	 * @param mixed $value
	 * @param array $options
	 * @return boolean
	 */
	public function regex($value, $options)
	{
		if (!preg_match($options['pattern'], $value)) {
			return false;
		}
		return true;
	}

}
