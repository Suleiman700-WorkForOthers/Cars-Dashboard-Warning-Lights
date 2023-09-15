
import InputManager from '../../../../assets/js/utils/input-manager/InputManager.js';


const name = new InputManager('main', 'input-model-name')
const image = new InputManager('main', 'input-image')
const years = new InputManager('main', 'input-years')
const description = new InputManager('main', 'input-description')

const inputs = {
    name,
    image,
    years,
    description,
}

export default inputs
