import React from 'react'

export default class Live extends React.Component {
    render() {
        return (
            <div className="inner">
                <h2 className="main">Do you live in USA?</h2>
                <form>
                    <div className="small-width-container">
                        <div className="form-group small-width width-xs">
                            <button
                                onClick={this.props.next}
                                className="btn btn-primary">
                                No
                            </button>
                        </div>
                        <div className="form-group small-width width-xs">
                            <a href="javascript:void(0)" className="btn btn-default">Yes</a>
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