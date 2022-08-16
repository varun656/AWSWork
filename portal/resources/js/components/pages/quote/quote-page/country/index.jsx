import React from 'react'
import countryImg from "../../../../../assets/images/image-country.svg";

export default class Country extends React.Component {
    render() {
        return (
            <div className="inner">
                <h2 className="main">Nice to meet you Zeshan! <br/>What country is your primary passport from</h2>
                <img className="quote-main-image" src={countryImg} alt="" />
                <form>
                    <div className="select-div">
                        <select className="form-control">
                            <option value="0">Choose Country</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div className="form-group">
                        <a href="javascript:void(0)" class="add-country"><i class="fa fa-plus"></i> Add country</a>
                    </div>

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