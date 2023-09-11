
import { API_CARS } from '../constants/API.js';
import Request from './utils/Request.js';

class Cars {
    data = []

    constructor() {}

    async getAllDataFromServer() {
        const requestData = {
            controller: API_CARS.CONTROLLER,
            method: API_CARS.METHODS.GET_ALL_RECORDS
        }
        const response = await Request.send('GET', requestData)
        return response
    }

    async getAllSubModels() {
        const requestData = {
            controller: API_CARS.CONTROLLER,
            method: API_CARS.METHODS.GET_ALL_SUB_MODELS
        }
        const response = await Request.send('GET', requestData)
        return response
    }
}

export default new Cars()
