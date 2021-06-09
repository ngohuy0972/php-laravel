import React, { Component } from 'react';
import { BrowserRouter as Router, Link } from 'react-router-dom';

class Breadcrumb extends Component {
    render(){
        return(
          <div className="breadcrumb-container">
            <Router>
            <section className="page-add">
              <div className="container">
                  <div className="row">
                      <div className="col-lg-4">
                          <div className="page-breadcrumb">
                              <h2>Dresses<span>.</span></h2>
                              <Link to="/">Home</Link>
                              <Link to="/dresses">Dresses</Link>
                              <Link className="active" to="/night-dresses">Night Dresses</Link>
                          </div>
                      </div>
                      <div className="col-lg-8">
                          <img src="img/add.jpg" alt=""/>
                      </div>
                  </div>
              </div>
            </section> 
            </Router>   
          </div>       
        );
    }
}

export default Breadcrumb;