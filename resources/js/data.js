class data {

    constructor(){

        this._currentDate;
        this.initialize();

    }

    initialize(){

       let dateEl = document.querySelector("#data");
       let timeEl = document.querySelector("#hora");

       dateEl.innerHTML = "01/08/2022";
       timeEl.innerHTML = "00:00";
    }

}


