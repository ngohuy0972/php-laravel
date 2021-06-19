import React, { Component } from 'react';
import Banner from './Elements/Banner';
import Features from './Elements/Features';
import Products from './Elements/Products';


class Home extends Component {
    render() {
        return (
            <div className="home-container">
                <Banner></Banner>
                <Features></Features>
                <Products></Products>

            </div>
        );
    }
}

export default Home;