import React from 'react'
import {createNotification} from "../../../../../utils/notificationManager";
import { NOTIFICATION_TYPES} from "../../../../../common/constants";
import heyImage from "../../../../../assets/images/image-hey.svg";

import { nameService } from "./services";

const REQUIRED_FIELDS = {
    FIRST_NAME: 'firstName',
    LAST_NAME: 'lastName',
};

export default class Name extends React.Component {

    state = {
        errors: [],
        firstName: '',
        lastName: '',
    };

    hasErrors = (field) => {
        return this.state.errors.includes(field);
    };

    resetErrors = (field) => {
        this.setState({
            errors: this.state.errors.filter(fieldName => fieldName !== field)
        });
    }

    validateFields = () => {
        const {
            firstName,
            lastName,
            errors,
        } = this.state;

        let isValid = true;

        if (firstName.length === 0) {
            this.setState({ errors: [...errors, REQUIRED_FIELDS.FIRST_NAME] });
            isValid = false;
        } else if (lastName.length === 0) {
            this.setState({ errors: [...errors, REQUIRED_FIELDS.LAST_NAME] });
            isValid = false;
        }

        if (!isValid) {
            createNotification(NOTIFICATION_TYPES.ERROR, 'Please select required values');
        }

        return isValid;
    };

    create = (event) => {
        event.preventDefault();
        if (!this.validateFields()) {
            return;
        }
        const {
            firstName,
            lastName,
        } = this.state;

        const request = {
            first_name: firstName,
            last_name: lastName,
        };

        return nameService
            .submitName({request})
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
                            <input type="text"  placeholder="First Name"
                                   className={this.hasErrors(REQUIRED_FIELDS.FIRST_NAME) ? 'error form-control' : 'form-control'}
                                   value={this.state.firstName}
                                   onChange={event => {
                                       this.resetErrors(REQUIRED_FIELDS.FIRST_NAME);
                                       this.setState({ firstName: event.target.value })
                                   }}
                            />
                        </div>
                        <div className="form-group small-width">
                            <label>Last Name</label>
                            <input type="text" placeholder="Last Name"
                                   className={this.hasErrors(REQUIRED_FIELDS.LAST_NAME) ? 'error form-control' : 'form-control'}
                                   value={this.state.lastName}
                                   onChange={event => {
                                       this.resetErrors(REQUIRED_FIELDS.LAST_NAME);
                                       this.setState({ lastName: event.target.value })
                                   }}
                            />
                        </div>
                    </div>
                    <div className="clearfix"></div>
                    <button
                        onClick={this.create}
                        className="btn btn-brand">
                        Next
                    </button>
                </form>
            </div>
        );
    }
}