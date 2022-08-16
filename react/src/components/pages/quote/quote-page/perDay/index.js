import React from 'react'

export default class perDay extends React.Component {
    render() {
        return (
            <div className="inner gender per-day">
                <h2 className="main">How many per day? </h2>
                <form>
                    <div className="small-width-container m0">
                        <div className="form-group small-width">
                            <a href="javascript:void(0)" className="btn btn-default male">Less than 20 per day</a>
                        </div>
                        <div className="form-group small-width">
                            <a href="javascript:void(0)" className="btn btn-primary female">More than 20 per day</a>
                        </div>
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