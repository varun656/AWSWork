import React from 'react'

export default class Converge extends React.Component {
    render() {
        return (
            <div className="inner">
                <h2 className="main">This question number 4 is newly added by "sir zeeshan" and its date selector<br/>
                    When would you like coverage to begin?
                </h2>
                <form>
                    <div className="form-group padding-zero">
                        <input type="text" className="form-control" placeholder="select date" />
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