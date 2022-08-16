import React from 'react'
import {Link} from "react-router-dom";
import '../../../../assets/css/bootstrap.min.css';
import '../../../../assets/css/style.css';
import '../../../../assets/css/responsive.css';

import logo from "../../../../assets/images/logo.png";

const logoStyle = {
    height: '54px',
    width: 'auto'
}

export default class Header extends React.Component {
    render() {
        return (
            <div className="container">
                <nav className="navbar navbar-default navbar-quote">
                    <div className="navbar-header">
                        <div className="menu-icon">
                            <a href="javascript:void(0);" className="menu-btn" id="menu-btn">
                                <span className="top"></span>
                                <span className="middle"></span>
                                <span className="bottom"></span>
                            </a>
                        </div>
                        <Link
                            to={{ pathname: 'home' }}>
                            <img src={logo} alt="" style={logoStyle}/>
                        </Link>
                    </div>

                    <ul className="save-quote">
                        <li><a href="javascript:void(0)" className="btn btn-brand" data-toggle="modal" data-target=".save-quote-modal">Save Quote</a></li>
                    </ul>
                </nav>
                <aside>
                    <div className="menu">
                        <ul>
                            <li><a href=""> Home </a></li>
                            <li><a href=""> About us </a></li>
                            <li><a href=""> Save Quote </a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        );
    }
}