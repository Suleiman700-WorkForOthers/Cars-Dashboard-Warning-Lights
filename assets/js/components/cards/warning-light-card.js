export const genWarningLightCard = (_warningLightData, _clickEvent=undefined) => {
    // console.log(_carData)

    const div = document.createElement('div')
    div.classList.add('col-6', 'col-md-3', 'my-3', 'd-flex', 'align-items-stretch')

    // Set click event if passed
    if (_clickEvent !== undefined) {
        div.addEventListener('click', () => _clickEvent(_carData))
    }

    let html = `        
        <div class="card h-100 w-100">
            <div>
                <img class="img-fluid" src="${_warningLightData.image}" style="height: 100px;">
            </div>
            <div class="card-body">
                <h5 class="card-title my-3">${_warningLightData.name}</h5>
                <a href="#" class="btn btn-primary">Open</a>
            </div>
        </div>
    `
    div.innerHTML = html

    return div
}
