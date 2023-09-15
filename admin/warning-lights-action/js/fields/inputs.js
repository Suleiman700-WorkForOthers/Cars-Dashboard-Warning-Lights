
import InputManager from '../../../../assets/js/utils/input-manager/InputManager.js';


const name = new InputManager('main', 'input-name')
const description = new InputManager('main', 'input-description')
const image = new InputManager('main', 'input-image')

const inputs = {
    name,
    description,
    image,
}

export default inputs
