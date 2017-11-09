import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class SideBar extends Component{
    constructor(){
        super();
        this.state = {
            categories: [
                {
                    name: "alvin",
                    image_url: 'img/demo/alvin.png',
                },
                {
                    name: "alex",
                    image_url: 'img/demo/alex.png',
                },
                {
                    name: "kevin",
                    image_url: 'img/demo/kevin.png',
                },
                {
                    name: "alan",
                    image_url: 'img/demo/alan.png',
                },
                {
                    name: "office",
                    image_url: 'img/demo/office.jpg',
                },
                {
                    name: "mobile",
                    image_url: 'img/demo/mobile.png',
                },
            ]
        };
    }

    // componentWillMount () {
    //     this.state  = {
    //     }
    // }

    render () {
        let catItems;
        catItems = this.state.categories.map( category => {
            return (
                <li key={category.name}>
                    <a href={"/c/" + category.name}>
                        <div className="box">
                            <img src={category.image_url} alt={category.name} />
                        </div>
                    </a>
                </li>
            )
        });

        return (
            <ul className="sb__cats">
                {catItems}
                {/*<li className="trans__list"><span className="material-icons">menu</span></li>*/}
            </ul>
        );
    };
}

export default SideBar;

if (document.getElementById('sd__bar')) {
    ReactDOM.render(<SideBar />, document.getElementById('sd__bar'));
}