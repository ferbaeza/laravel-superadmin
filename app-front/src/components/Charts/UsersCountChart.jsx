import React from 'react';
import './styles/countCharts.scss';


function UsersCountChart({totalUsersData = 0}) {

    return (
        <div className="chart">
            <div className="chart-main">
                <div className="chart-title">
                    <span>Total</span>
                    <span>Usuarios</span>
                </div>
                <div className="chart-count">
                    <h2>{totalUsersData}</h2>
                </div>
            </div>
        </div>
    );
}
export default UsersCountChart;

