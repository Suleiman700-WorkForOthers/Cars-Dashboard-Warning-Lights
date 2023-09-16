import UrlParams from '../../../assets/js/classes/UrlParams.js';
import CarsModels from '../../../assets/js/classes/CarsModels.js';
import ErrorsPopup from '../../../assets/js/utils/ErrorsPopup.js';
import Loader from '../../../assets/js/utils/Loader.js';
import Cars from '../../../assets/js/classes/Cars.js';
import WarningLights from '../../../assets/js/classes/WarningLights.js';
import { warningLightCard } from '../../../assets/js/components/cards/warning-light-card.js';


Loader.showLoading()

// Check if car model exists
const carModelId = UrlParams.getParamByKey('id')
const carModelResponse = await CarsModels.getRecordById(carModelId)

// Show request errors popup if car model doesn't exists
if (!carModelResponse.state && carModelResponse.errors.length) {
    const ErrorsPopupIns = new ErrorsPopup()
    ErrorsPopupIns.requestErrorSettings.showConfirmBtn = true
    ErrorsPopupIns.requestErrorSettings.confirmButtonClickCallback = () => window.location.href = '../home/index.php'
    ErrorsPopupIns.showRequestErrors(carModelResponse.errors)
    throw "Error"
}

// Get car model manufacturer data
const carId = carModelResponse.data.car_id
const carResponse = await Cars.getRecordById(carId)
if (!carResponse.state && carResponse.errors.length) {
    const ErrorsPopupIns = new ErrorsPopup()
    ErrorsPopupIns.requestErrorSettings.showConfirmBtn = true
    ErrorsPopupIns.requestErrorSettings.confirmButtonClickCallback = () => window.location.href = '../home/index.php'
    ErrorsPopupIns.showRequestErrors(carResponse.errors)
    throw "Error"
}

// Get warning lights for car model
const warningLightsResponse = await WarningLights.getRecordsByCarModelId(carModelId)

// Set car model data in page
document.querySelector('#car-model-name').innerHTML = carModelResponse.data.name
document.querySelector('#car-model-manufacturer').innerHTML = carResponse.data.manufacturer
document.querySelector('#car-model-image').src = carModelResponse.data.image
document.querySelector('#car-model-years').innerHTML = carModelResponse.data.years
document.querySelector('#car-model-description').innerHTML = carModelResponse.data.description

// Build warning lights cards
if (warningLightsResponse.state && warningLightsResponse.data.length) {
    const warningLightsCards = document.createElement('div')
    const warningLights = warningLightsResponse.data
    warningLights.map(warningLight => {
        warningLightsCards.appendChild(warningLightCard(warningLight))
    })
    document.querySelector('#warning-lights').append(warningLightsCards)
}

Loader.close()
