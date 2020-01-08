import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';

const root = document.getElementById('root');
const category = root.getAttribute("category");

const routes = require('../../../public/js/fos_js_routes.json');
import Routing from '../../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js';
Routing.setRoutingData(routes);

function App() {
  const [cocktails, setCocktails] = useState([]);
  const [order, setOrder] = useState("ASC");
  const [search, setSearch] = useState(null);

  function fetchCocktail() {
    fetch(Routing.generate('cocktail_show_api', { id: category, order: order, search: search }))
      .then((response)=>{
        return response.json();
      })
      .then((result) => {
        setCocktails(result)
      })
  }

  useEffect(() => {
    fetchCocktail();
  }, []);

  useEffect(() => {
    fetchCocktail();
  }, [order, search]);

  return (
    <div className="row">
      <div className="col-12">
        <div className="row">
          <p className="col-2 m-0 align-middle text-center font-weight-bold">Order by</p>
          <select className="col-10 form-control" onChange={(event) => setOrder(event.target.value)}>
            <option value="ASC">asc</option>
            <option value="DESC">desc</option>
          </select>
        </div>
        <div className="row">
          <p className="col-2 m-0 align-middle text-center font-weight-bold">Search</p>
          <input className="col-10 form-control" type="text" onChange={(event) => setSearch(event.target.value)}/>
        </div>
      </div>
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
          })}
      </div>
    </div>
  );
}

ReactDOM.render(
  <App/>,
  root
);
