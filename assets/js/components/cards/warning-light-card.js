export const warningLightCard = (_warningLightData, _clickEvent=undefined) => {
    // console.log(_carData)

    const div = document.createElement('div')
    div.classList.add('d-flex')

    // Set click event if passed
    if (_clickEvent !== undefined) {
        div.addEventListener('click', () => _clickEvent(_carData))
    }

    let html = `
        <img class="img-fluid blur-up lazyload" src="${_warningLightData.image}" data-src="${_warningLightData.image}" alt="image" title="image" style="width: 48px;" />
        <h5>${_warningLightData.name}</h5>
        <span>Find dashboard warning lights description and how-tos</span>
    `
    div.innerHTML = html

    return div
}
