import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link, Switch } from 'react-router-dom';
import Home from '../components/Home';
import Header from '../components/Elements/Header';
import Footer from '../components/Elements/Footer';
import Shop from '../components/Pages/Shop';
import CheckOut from '../components/Pages/CheckOut';
import ShoppingCart from '../components/Pages/ShoppingCart';
import ProductPage from '../components/Pages/ProductPage';
import Contact from '../components/Pages/Contact';
import About from '../components/Pages/About';

function App() {
    return (
        <Router>
            <Header></Header>
            <Switch>
                <Route exact path="/" component={ Home } />
                <Route path="/shop" component={ Shop } />
                <Route path="/product-page" component={ ProductPage } />
                <Route path="/shopping-cart" component={ ShoppingCart } />
                <Route path="/check-out" component={ CheckOut } />
                <Route path="/about" component={ About } />
                <Route path="/contact" component={ Contact } />
            </Switch>
            <Footer></Footer>
        </Router>
    );
}

export default App;

if (document.getElementById('react-app')) {
    ReactDOM.render(<App />, document.getElementById('react-app'));
}
