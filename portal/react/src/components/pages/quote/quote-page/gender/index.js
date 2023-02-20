import React from 'react'

export default class Gender extends React.Component {
    render() {
        return (
            <div className="inner gender">
                <h2 className="main">Gender</h2>
                <form>
                    <div className="small-width-container">
                        <div className="form-group small-width">
                            <a href="javascript:void(0)" className="btn btn-default male">Male</a>
                        </div>
                        <div className="form-group small-width">
                            <a href="javascript:void(0)" className="btn btn-primary female">Female</a>
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