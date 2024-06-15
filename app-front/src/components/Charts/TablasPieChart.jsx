import * as React from 'react';
import './styles/barCharts.scss';
import {
    PieChart,
    Pie,
    ResponsiveContainer,
    Cell,
    Tooltip
} from 'recharts';



export default function TablasPieChart({ tablasData = [] }) {

    const COLORS = ['#0088FE', '#00C49F', '#FFBB28', '#FF8042'];

    return (
        <div className="tablasbar">
            <ResponsiveContainer width="100%" height="100%">
                <PieChart width={800} height={700}>
                    <Pie
                        data={tablasData}
                        cx={170}
                        cy={130}
                        innerRadius={70}
                        outerRadius={110}
                        fill="#8884d8"
                        paddingAngle={2}
                        dataKey="size"
                    >
                        {tablasData.map((entry, index) => (
                            <Cell key={`cell-${index}`} fill={COLORS[index % COLORS.length]} />
                        ))}
                    </Pie>
                    <Tooltip formatter={(value, name, props) => [value + '_Mb', `Tabla: ${props.payload.nombre}`]} />
                </PieChart>
            </ResponsiveContainer>

        </div>
    );
}
