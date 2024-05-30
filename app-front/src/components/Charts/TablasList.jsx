import React from 'react';
import './styles/listCharts.scss';


function TablasList(/* {usersData =[]} */) {

    // console.log('usersData', usersData);
/*     usersData && usersData.map((user)=>{
        console.log('id', user.id);
        console.log('email', user.email);
    }) */
    return (
        <div className="tablas">
            <h1>TablasList</h1>
            <div className="tabla-data" key='id'>
                <div className="tabla-name">
                    <span>tabla-name</span>
                </div>
                <div className="tabla-email">
                    <span>tabla-email</span>
                </div>
            </div>

            <div className="tabla-data" key='id'>
                <div className="tabla-name">
                    <span>tabla-name</span>
                </div>
                <div className="tabla-email">
                    <span>tabla-email</span>
                </div>
            </div>
        </div>
    );
}



export default TablasList;

