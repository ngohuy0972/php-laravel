import React, { Component } from 'react';
import { BrowserRouter as Router, Link } from 'react-router-dom';


class Header extends Component {
    render() {
        return(
        <div>  
          <div id="preloder">
              <div className="loader"></div>
          </div>
          
 
          <div className="search-model">
              <div className="h-100 d-flex align-items-center justify-content-center">
                  <div className="search-close-switch">+</div>
                  <form className="search-model-form"/>
                      <input type="text" id="search-input" placeholder="Search here....."/>
                  
              </div>
          </div>
          <Router> 
          <div className="header-section">
              <div className="container-fluid">
                  <div className="inner-header">
                      <div className="logo">
                          <Link to="#"><img src="img/logo.png" alt=""/></Link>
                      </div>
                      <div className="header-right">
                          <img src="img/icons/search.png" alt="" className="search-trigger"/>
                          <img src="img/icons/man.png" alt=""/>
                          <Link to="#">
                              <img src="img/icons/bag.png" alt=""/>
                              <span>2</span>
                          </Link>
                      </div>
                      <div className="user-access">
                          <Link to="#">Register</Link>
                          <Link to="#" className="in">Sign in</Link>
                      </div>
                      <nav className="main-menu mobile-menu">
                          <ul>
                              <li><Link className="active" to="/">Home</Link></li>
                              <li><Link to="/shop">Shop</Link>
                                  <ul className="sub-menu">
                                      <li><Link to="/product-page">Product Page</Link></li>
                                      <li><Link to="/shopping-cart">Shopping Cart</Link></li>
                                      <li><Link to="check-out">Check out</Link></li>
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
          </Router>
          <div className="header-info">
              <div className="container-fluid">
                  <div className="row">
                      <div className="col-md-4">
                          <div className="header-item">
                              <img src="img/icons/delivery.png" alt=""/>
                              <p>Free shipping on orders over $30 in USA</p>
                          </div>
                      </div>
                      <div className="col-md-4 text-left text-lg-center">
                          <div className="header-item">
                              <img src="img/icons/voucher.png" alt=""/>
                              <p>20% Student Discount</p>
                          </div>
                      </div>
                      <div className="col-md-4 text-left text-xl-right">
                          <div className="header-item">
                          <img src="img/icons/sales.png" alt=""/>
                          <p>30% off on dresses. Use code: 30OFF</p>
                      </div>
                      </div>
                  </div>
              </div>
          </div> 
        </div>                                               
        );
    }
}

export default Header;