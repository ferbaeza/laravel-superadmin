import React from 'react';
import './styles/listCharts.scss';


function UsersList({usersData =[]}) {

    console.log('usersData', usersData);

    return (
        <div className="users">
            <h1>UsersCharts</h1>

            {usersData && usersData.map((user)=>(
                <div className="user-data" key={user.id}>
                    <div className="user-name">
                        <span>{user.name ?? "User-name"}</span>
                    </div>
                    <div className="user-email">
                        <span>{user.email}</span>
                    </div>
                </div>
            ))}
        </div>
    );
}



export default UsersList;

