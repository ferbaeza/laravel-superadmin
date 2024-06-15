import React from 'react';
import './styles/countCharts.scss';


function TablasCountChart({ totalTablasData = 0 }) {

    const publicPath = process.env.PUBLIC_URL + '/icons/';

    return (
        <div className="chart">
            <div className="chart-main">
                <div className="chart-title">
                    <img className='logo-sidebar' src={publicPath + 'database-fill-add-dark.svg'} alt='totalUsuarios' />

                </div>
                <div className="chart-count">
                    <span>Total</span>
                    <span>Tablas</span>
                    <h2>{totalTablasData}</h2>
                </div>
            </div>
        </div>
    );
}
export default TablasCountChart;

