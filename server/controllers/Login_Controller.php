<?php

class Login_Controller extends Controller
{
    public function __construct($_params)
    {
        $this->params = $_params;
    }

    /**
     * perform admin login
     */
    function performAdminLogin()
    {
        global $ERROR_CODES, $Errors, $Session;

        // Check passed email
        if (!isset($this->params['email']) || empty($this->params['email'])) {
            $errorText = $ERROR_CODES['ADMIN_LOGIN']['MISSING_REQUEST_PARAMS']['EMAIL']['NAME'];
            $errorCode = $ERROR_CODES['ADMIN_LOGIN']['MISSING_REQUEST_PARAMS']['EMAIL']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('email')->setErrorDetails('Trying to login without passing required parameter')->gen();
            $this->state = false;
            return $this;
        }
        // Check passed password
        if (!isset($this->params['password']) || empty($this->params['password'])) {
            $errorText = $ERROR_CODES['ADMIN_LOGIN']['MISSING_REQUEST_PARAMS']['PASSWORD']['NAME'];
            $errorCode = $ERROR_CODES['ADMIN_LOGIN']['MISSING_REQUEST_PARAMS']['PASSWORD']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('email')->setErrorDetails('Trying to login without passing required parameter')->gen();
            $this->state = false;
            return $this;
        }

        // Search for user
        $_params = [
            'email' => $this->params['email'],
        ];
        $array_search = [
            'email' => ['s'],
        ];
        $this->setModel('AdminLogin_Model');
        $data = $this->model->filter($_params, $array_search);

        // Return error if no user found
        if (empty($data)) {
            $errorText = $ERROR_CODES['ADMIN_LOGIN']['RESULTS']['USER_NOT_FOUND']['NAME'];
            $errorCode = $ERROR_CODES['ADMIN_LOGIN']['RESULTS']['USER_NOT_FOUND']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('email')->setErrorDetails('Trying to login without passing required parameter')->gen();
            $this->state = false;
            return $this;
        }

        // Validate admin password
        $hashedPassword = $data[0]['password'];
        $providedPassword = $this->params['password']; // The password provided during login
        if (password_verify($providedPassword, $hashedPassword)) {

            // Set login session
            $Session->setLogged(true);

            $this->state = true;
            return $this;
        }
        else {
            // Passwords do not match
            $errorText = $ERROR_CODES['ADMIN_LOGIN']['RESULTS']['INVALID_PASSWORD']['NAME'];
            $errorCode = $ERROR_CODES['ADMIN_LOGIN']['RESULTS']['INVALID_PASSWORD']['CODE'];
            $this->errors[] = $Errors->setErrorText($errorText)->setErrorCode($errorCode)->setErrorVariable('password')->setErrorDetails('Check if provided password matches the hashed password.')->gen();
            $this->state = false;
        }
    }

}
