
import ButtonManager from '../../../../assets/js/classes/utils/button-manager/ButtonManager.js';
import Loader from '../../../../assets/js/classes/utils/Loader.js';

const btnAddNewCarClick = async (_callback) => {
    console.log('clicked')
    // window.location.href = "../dashboard/index.php";
}

const btnAddNewCar = new ButtonManager('main', 'btn-add-new-car', btnAddNewCarClick)

// Enable onClick
btnAddNewCar.onClick()

const buttons = {
    btnAddNewCar,
}

export default buttons
