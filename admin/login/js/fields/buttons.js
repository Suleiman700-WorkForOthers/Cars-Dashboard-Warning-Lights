
import ButtonManager from '../../../../assets/js/classes/utils/button-manager/ButtonManager.js';
import Loader from '../../../../assets/js/classes/utils/Loader.js';
import Request from '../../../../assets/js/classes/utils/Request.js';
import inputs from './inputs.js';
import Login from '../../../../assets/js/classes/Login.js';

const btnLoginClick = async (_callback) => {
    Loader.showLoading()

    // Parameter validations will be handlers in server
    const email = inputs.email.valueGet()
    const password = inputs.password.valueGet()

    const loginData = {
        email,
        password,
    }
    const response = await Login.performAdminLogin(loginData)

    // Check if logged
    if (response.state) {
        Swal.fire({
            icon: 'success',
            title: 'Logged Successfully'
        })

        // Redirect to dashboard
        window.location.href = "../dashboard/index.php";
    }
}

const btnLogin = new ButtonManager('login-form', 'btn-login', btnLoginClick)

// Enable onClick
btnLogin.onClick()

const buttons = {
    btnLogin,
}

export default buttons
