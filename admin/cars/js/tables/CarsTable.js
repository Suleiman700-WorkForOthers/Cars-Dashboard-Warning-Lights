
export default class CarsTable {

    editBtnCallback = undefined

    /**
     *
     * @param _tableId {string}
     */
    constructor(_tableId=undefined) {
        this.tableId = _tableId

        // Check passed table id
        if (this.tableId === undefined) {
            throw "[Table Util] Table ID is required!"
        }

        // Check if table found
        if (!this.doesExists()) {
            throw `[Table Util] No table has found with id ${this.tableId}`
        }

        this.editBtnCallback = undefined
    }

    /**
     * show no results row
     * @return {void}
     */
    showNoResultsRow() {
        // clear table rows
        this.clearRows()

        // show row
        const tableTbody = document.querySelector(`#${this.tableId} tbody`)

        const tr = document.createElement('tr')
        const td = document.createElement('td')
        td.setAttribute('colspan', '100%')
        td.innerText = 'No Data Found!'
        tr.append(td)

        tableTbody.append(tr)
    }

    /**
     * add row into table
     * @param _rowInfo {object}
     * @return {void}
     *
     * example of _rowInfo:<br>
     * {<br>
     *     "name": "",<br>
     *     "logo": "",<br>
     * }<br>
     */
    rowAdd(_rowInfo) {
        const row = this.#buildRow(_rowInfo)

        // add row into table
        document.querySelector(`#${this.tableId} tbody`).appendChild(row)
    }

    /**
     * receive category info and build a row for it to be inserted into table
     * @param _personInfo
     */
    #buildRow(_rowInfo) {
        const tr = document.createElement('tr')

        // index cell
        const cell_id = document.createElement('th')
        cell_id.innerText = this.rowsCount() + 1
        cell_id.setAttribute('scope', 'row')
        tr.appendChild(cell_id)

        const cell_manufacturer = document.createElement('td')
        cell_manufacturer.innerText = _rowInfo.manufacturer
        tr.appendChild(cell_manufacturer)

        const cell_logo = document.createElement('td')
        const logo = document.createElement('img')
        logo.src = `../../${_rowInfo.logo}`
        logo.style = 'width: 50px; height: 50px'
        cell_logo.append(logo)
        tr.appendChild(cell_logo)

        // options cell
        const cell_options = document.createElement('td')
        const button_edit = document.createElement('button')
        button_edit.classList.add('btn', 'btn-primary', 'text-white', 'rounded', 'fa', 'fa-edit')
        button_edit.style.cursor = 'pointer'
        button_edit.innerHTML = ' Edit'

        // Set click event if enabled
        if (this.editBtnCallback !== undefined) {
            button_edit.addEventListener('click', () => {
                this.editBtnCallback(_rowInfo)
            })
        }

        cell_options.append(button_edit)
        tr.appendChild(cell_options)

        return tr
    }

    /**
     * clear table rows
     * @return {void}
     */
    clearRows() {
        document.querySelector(`#${this.tableId} tbody`).innerHTML = ''
    }

    /**
     * get the number of table rows
     * @return {number}
     */
    rowsCount() {
        const rows = document.querySelectorAll(`#${this.tableId} tbody tr`)
        return rows.length
    }

    /**
     * check if table exists
     * @return {boolean}
     */
    doesExists() {
        const element =  document.querySelector(`table#${this.tableId}`);
        return typeof (element) != 'undefined' && element != null;
    }
}