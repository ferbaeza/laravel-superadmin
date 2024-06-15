import React from 'react';
import './styles/countCharts.scss';


function UsersCountChart({totalUsersData = 0}) {

    const publicPath = process.env.PUBLIC_URL + '/icons/';

    return (
        <div className="chart">
            <div className="chart-main">
                <div className="chart-title">
                    <img className='logo-sidebar' src={publicPath + 'people-fill-dark.svg'} alt='totalUsuarios' />

                </div>
                <div className="chart-count">
                    <span>Total</span>
                    <span>Usuarios</span>
                    <h2>{totalUsersData}</h2>
                </div>
            </div>
        </div>
    );
}
export default UsersCountChart;

