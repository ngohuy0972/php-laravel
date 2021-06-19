import React, { Component } from 'react';
import { BrowserRouter as Router, Link, Switch, Route } from 'react-router-dom';
import Home from '../Home';
import CheckOut from '../Pages/CheckOut';
import Contact from '../Pages/Contact';
import ProductPage from '../Pages/ProductPage';
import Shop from '../Pages/Shop';
import ShoppingCart from '../Pages/ShoppingCart';

class Header extends Component {
    render() {
        return(
        <Router>
        <div>  
          <div id="preloder">
              <div className="loader"></div>
          </div>
          
 
          <div className="search-model">
              <div className="h-100 d-flex align-items-center justify-content-center">
                  <div className="search-close-switch">+</div>
                  <form className="search-model-form"/>
                      <input type="text" className="search-input" placeholder="Search here....."/>
                  
              </div>
          </div>
          <div className="header-section">
              <div className="container-fluid">
                  <div className="inner-header">
                      <div className="logo">
                          <Link to="#"><img src="frontend/img/logo.png" alt=""/></Link>
                      </div>
                      <div className="header-right">
                          <img src="frontend/img/icons/search.png" alt="" className="search-trigger"/>
                          <img src="frontend/img/icons/man.png" alt=""/>
                          <Link to="#">
                              <img src="frontend/img/icons/bag.png" alt=""/>
                              <span>2</span>
                          </Link>
                      </div>
                      <div className="user-access">
                          <Link to="/register">Register</Link>
                          <Link to="/login" className="in">Log in</Link>
                      </div>
                      <nav className="main-menu mobile-menu">
                          <ul>
                              <li><Link className="active" to="/">Home</Link></li>
                              <li><Link to="/shop">Shop</Link>
                              
                                  <ul className="sub-menu">
                                      <li><Link to="/product-page">Product Page</Link></li>
                                      <li><Link to="/shopping-cart">Shopping Cart</Link></li>
                                      <li><Link to="/check-out">Check Out</Link></li>
                                  </ul>
                              </li>
                              <li><Link to="/about">About</Link></li>
                              <li><Link to="/blog">Blog</Link></li>
                              <li><Link to="/contact">Contact</Link></li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
          <div className="header-info">
              <div className="container-fluid">
                  <div className="row">
                      <div className="col-md-4">
                          <div className="header-item">
                              <img src="frontend/img/icons/delivery.png'" alt=""/>
                              <p>Free shipping on orders over $30 in USA</p>
                          </div>
                      </div>
                      <div className="col-md-4 text-left text-lg-center">
                          <div className="header-item">
                              <img src="frontend/img/icons/voucher.png'" alt=""/>
                              <p>20% Student Discount</p>
                          </div>
                      </div>
                      <div className="col-md-4 text-left text-xl-right">
                          <div className="header-item">
                          <img src="frontend/img/icons/sales.png'" alt=""/>
                          <p>30% off on dresses. Use code: 30OFF</p>
                      </div>
                      </div>
                  </div>
              </div>
          </div> 
        </div>    
        </Router>                                       
        );
    }
}

export default Header;