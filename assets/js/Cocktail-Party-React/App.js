import React, {useState, useEffect} from 'react';
import ReactDOM from 'react-dom';

const routes = require('../../../public/js/fos_js_routes.json');
import Routing from '../../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js';
Routing.setRoutingData(routes);

function App() {
  const [cocktails, setCocktails] = useState([]);

  function handleOnChange(event) {
    fetch(Routing.generate('numberCocktail', { number: cocktail.event.target.value }))
      .then((response) => {return response.json()})
      .then((result) => {
        setCocktails(result)
      })
  }

  return (
    <div className="container">
      <div className="row">
        <select className="form-control" onChange={handleOnChange}>
          <option value={0}>0</option>
          <option value={1}>1</option>
          <option value={2}>2</option>
          <option value={3}>3</option>
          <option value={4}>4</option>
          <option value={5}>5</option>
          <option value={6}>6</option>
          <option value={7}>7</option>
          <option value={8}>8</option>
          <option value={9}>9</option>
          <option value={10}>10</option>
        </select>
      </div>
      <div className="row text-center">
        { cocktails.length === 0 ?
            <h1>Pas de cocktail</h1>
          :
            <div className="row">
              { cocktails.map((cocktail) => {
                return (
                  <div className="col-xs-12 co-md-6 col-xl-4" key={cocktail.id}>
                    <div className="card mt-2">
                      <img className="card-img-top" src={ cocktail.image } alt="Card image cap"/>
                      <div className="card-body">
                        <h5 className="card-title">{ cocktail.name }</h5>
                        <p className="card-text">{ cocktail.description.substring(0, 100) }...</p>
                        <a href={Routing.generate('cocktail_detail', { id: cocktail.id })} className="btn btn-primary">Detail</a>
                      </div>
                    </div>
                  </div>
                )
              }) }
            </div>
        }
      </div>
    </div>
  )
}

ReactDOM.render(
  <App />,
  document.getElementById('root')
);
