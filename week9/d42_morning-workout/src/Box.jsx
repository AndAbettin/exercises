import { useState, useEffect } from 'react';


export default function Box({ topMargin }) {

    return (
        <div className="box" style={{ 'marginTop': topMargin + 'vh' }}>

        </div>
    )
}