var tunaArray = [];

Element.prototype.tuna = function(text, duration, init = null, func = null) {
  //console.log(text);
  //console.log(duration);



  let fragment = document.createDocumentFragment();
  for (let i = 0; i < 3; i++) {
    let header = document.createElement('h3');
    fragment.appendChild(header);
  }

  this.appendChild(fragment); //Add the new header

  let headers = this.getElementsByTagName('H3');
  //console.log(headers);
  tunaArray.push(new tunaText(headers, text, duration, init, func));
  //tunaArray[l - 1].startInterval();

}


class tunaText {



  constructor(headers, text, duration, init, func) {
    this.indexEnterText = 0; //index of which header is in standby, 0~2
    this.index = 0;          //index of which text is written to standby
    this.text = text;
    this.headers = headers;
    this.duration = duration;
    if (func == null) {
      this.func = this.transition;
    } else {
      this.func = func;
    }

    if (init == null) {
      this.init = this.initialize;
    } else {
      this.init = init;
    }
    //this.changeText = changeText;
    //this.transition = transition;
    //this.startInterval = startInterval;

    //Prepare tuna

    this.init();

    setInterval(this.changeText.bind(this), this.duration);



  }


  initialize() {

    for (var i = 0; i < 3; i++) {
      let fragment = document.createDocumentFragment();
      //console.log(e);
      for (let j = 0; j < this.text[i].length; j++) {
        let letter = document.createElement('span');
        letter.innerHTML = this.text[i][j];
        fragment.appendChild(letter);
      }
      this.indexEnterText = (this.indexEnterText >= 2) ? 0 : this.indexEnterText + 1;
      this.headers[this.indexEnterText].appendChild(fragment); //Add the new header
    }
    this.headers[0].id = 'enter';
    this.headers[1].id = 'exit';
    this.headers[2].id = 'display';
  }

  changeText() {
    let e = this;
    //change the text in the h3 that faded out to prepare for the next transition
    let fragment = document.createDocumentFragment();
    //console.log(e);
    for (let i = 0; i < e.text[e.index].length; i++) {
      let letter = document.createElement('span');
      letter.innerHTML = e.text[e.index][i];
      fragment.appendChild(letter);
    }

    e.indexEnterText = (e.indexEnterText >= 2) ? 0 : e.indexEnterText + 1;
    //console.log(e.text[0]);

    let emptyNode = e.headers[e.indexEnterText].cloneNode(false);
    e.headers[e.indexEnterText].parentNode.replaceChild(emptyNode, e.headers[e.indexEnterText]); //Delete the old header
    e.headers[e.indexEnterText].appendChild(fragment); //Add the new header


    e.func(e.headers[e.indexEnterText], e.headers[(e.indexEnterText + 1) % 3], e.headers[(e.indexEnterText + 2) % 3]); //out index, in index: Transition headers

    e.index++;
    if (e.index > e.text.length - 1) {
      e.index = 0;
    }


  }

  transition(indexEnter, indexExit, indexDisplay) {
    indexEnter.id = 'enter';
    indexDisplay.id = 'display';
    indexExit.id = 'exit';

    //TODO:some fadeout animations
  }
}
