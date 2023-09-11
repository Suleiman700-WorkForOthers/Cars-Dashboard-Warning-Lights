
import Cars from '../../../assets/js/classes/Cars.js';
import Loader from '../../../assets/js/classes/utils/Loader.js';
import { genCarCards, genCarModelCard } from '../../../assets/js/components/cards/car-cards.js';

Loader.showLoading()

// Get cars
const carsResponse = await Cars.getAllDataFromServer()
const carsSubModelsResponse = await Cars.getAllSubModels();

const carModelCardOnClick = _carModelData => {
    console.log(_carModelData)
}

const carCardOnClick = _carData => {
    // Get car sub models
    let carModels = []
    if (carsSubModelsResponse.state && carsSubModelsResponse.data.length) {
        carModels = carsSubModelsResponse.data.filter(subModel => subModel.manufacturer === _carData.manufacturer)
    }

    // Generate car models cards
    const carModelsCards = document.createElement('div')
    carModelsCards.classList.add('d-flex')

    // Generate models cards if found
    if (carModels?.length) {
        carModels.forEach(carModel => {
            const carModelCard = genCarModelCard(carModel, carModelCardOnClick)
            carModelsCards.appendChild(carModelCard)
        })
    }
    else {
        carModelsCards.innerHTML = `<p class="w-100">No models have been found...</p>`
    }

    Swal.fire({
        title: `${_carData.manufacturer} Models`, // Set the title to the car name
        html: carModelsCards,
        confirmButtonText: 'Close',
    });
}

// Build cars cards component if found data
if (carsResponse.state && carsResponse.data.length) {
    const carsData = carsResponse.data
    for (const carData of carsData) {
        // Add card to page
        const html = genCarCards(carData, carCardOnClick)
        document.querySelector('#cars-cards').appendChild(html)
    }
}
else {
    document.querySelector('#cars-cards').innerHTML = `<h3 class="w-100 text-center text-muted">Sorry, No cars have been found...</h3>`
}

Loader.close()
