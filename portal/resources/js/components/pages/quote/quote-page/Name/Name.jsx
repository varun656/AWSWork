import React from 'react'
import heyImage from "../../../../../assets/images/image-hey.svg";

import { nameService } from "./services";

export default class Name extends React.Component {

    submit = () => {
        const options = {
            firstName: 'Ali',
            lastName: 'Tariq',
        };

        return nameService
            .submitName({options})
            .then(response => {
                this.props.next();
            });
    };

    render() {
        return (
            <div className="inner">
                <h2 className="main">Hi, it nice to meet you! What your name?</h2>
                <img className="quote-main-image" src={heyImage} alt="" />
                <form>
                    <div className="small-width-container m0">
                        <div className="form-group small-width">
                            <label>First Name</label>
                            <input type="text" className="form-control" placeholder="First Name" />
                        </div>
                        <div className="form-group small-width">
                            <label>Last Name</label>
                            <input type="text" className="form-control" placeholder="Last Name" />
                        </div>
                    </div>
                    <div className="clearfix"></div>
                    <button
                        onClick={this.props.next}
                        className="btn btn-brand">
                        Next
                    </button>
                </form>
            </div>
        );
    }
}