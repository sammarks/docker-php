<?php
/**
 * @file AuthConfig.php
 */
namespace Docker;

class AuthConfig {

	/**
	 * The username.
	 * @var string
	 */
	protected $username = '';

	/**
	 * The password.
	 * @var string
	 */
	protected $password = '';

	/**
	 * The email.
	 * @var string
	 */
	protected $email = '';

	public function __construct($username, $password, $email)
	{
		$this->username = $username;
		$this->password = $password;
		$this->email = $email;
	}

	/**
	 * Get Encoded
	 *
	 * @return string The base64 encoded representation of the AuthConfig.
	 */
	public function getEncoded()
	{
		$json = array(
			'auth' => '',
			'email' => $this->email,
			'username' => $this->username,
			'password' => $this->password,
		);

		return base64_encode(json_encode($json));
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

}
