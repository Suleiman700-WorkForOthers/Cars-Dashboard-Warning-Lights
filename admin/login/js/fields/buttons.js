
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

// import ButtonManager from '../../../../assets/js/helpers/managers/button-manager/ButtonManager.js';
// import RequestGet from '../../../../assets/js/requests/RequestGet.js';
// import UrlParams from '../../../../assets/js/UrlParams.js';
// import ErrorsPopup from '../../../../assets/js/helpers/ErrorsPopup.js';
// import Loader from '../../../../assets/js/helpers/Loader.js';
//
// import inputName from '../inputs/input-name.js';
// import inputDescription from '../inputs/input-description.js';
// import Repairs from '../../../../javascript/classes/Repairs.js';
// import selectPerson from '../selects/select-person.js';
// import selectRepair from '../selects/select-repair.js';
// import inputAmount from '../inputs/input-amount.js';
// import inputNote from '../inputs/input-note.js';
// import selectPaymentMethod from '../selects/select-payment-method.js';
// import selectStatus from '../selects/select-status.js';
// import Payments from '../../../../javascript/classes/Payments.js';
//
// async function onClick(_instance) {
//     // show loader
//     Loader.showDataFetchingLoader()
//
//     const recordID = UrlParams.getParamByKey('id')
//
//     // save data
//     const newData = {
//         personID: selectPerson.get_selected_value(),
//         repairID: selectRepair.get_selected_value(),
//         amount: inputAmount.valueGet(),
//         name: inputName.valueGet(),
//         description: inputDescription.valueGet(),
//         note: inputNote.valueGet(),
//         method: selectPaymentMethod.get_selected_value(),
//         status: selectStatus.get_selected_value()
//     }
//     const saveResponse = await Payments.updateRecord(recordID, newData)
//
//     // close loader
//     Loader.close()
//
//     // check response
//     if (saveResponse.state) {
//         // show success
//         Swal.fire({
//             icon: 'success',
//             title: 'Yay!',
//             html: 'Data updated successfully',
//         })
//
//     } else {
//         // check errors
//         if (saveResponse.errors.length) {
//             ErrorsPopup.requestErrorSettings.showConfirmBtn = true
//             ErrorsPopup.requestErrorSettings.showErrorVariable = true
//             ErrorsPopup.showRequestErrorsPopup(saveResponse.errors)
//         }
//     }
// }
//
// const btnSave = new ButtonManager('form', 'save', onClick)
// btnSave.onClick()
//
// export default btnSave
