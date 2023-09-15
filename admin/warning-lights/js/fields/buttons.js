
import ButtonManager from '../../../../assets/js/utils/button-manager/ButtonManager.js';
import Loader from '../../../../assets/js/utils/Loader.js';

// Navigate to add new car page
const btnAddNewWarningLightClick = async (_callback) => { window.location.href = "../warning-lights-action/index.php?mode=add"; }
const btnAddNewWarningLight = new ButtonManager('main', 'btn-add-new-warning-light', btnAddNewWarningLightClick)
btnAddNewWarningLight.onClick() // Enable onClick

const buttons = {
    btnAddNewWarningLight,
}

export default buttons
