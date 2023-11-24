import React, {Component} from 'react';
import Button from './Button';

class DangerButton extends Component {

    render() {
        return <Button color={{
            color: 'red'
        }}></Button>
    }
}

export default DangerButton;