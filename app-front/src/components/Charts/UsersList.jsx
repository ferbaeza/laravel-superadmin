import React from 'react';
import './styles/listCharts.scss';


function UsersList(/* {usersData =[]} */) {

    // console.log('usersData', usersData);
/*     usersData && usersData.map((user)=>{
        console.log('id', user.id);
        console.log('email', user.email);
    }) */
    return (
        <div className="users">
            <h1>UsersCharts</h1>



            <div className="user-data" key='id'>
                    <div className="user-name">
                        <span>User-name</span>
                    </div>
                    <div className="user-email">
                        <span>User-email</span>
                    </div>
                </div>

            <div className="user-data" key='id'>
                    <div className="user-name">
                        <span>User-name</span>
                    </div>
                    <div className="user-email">
                        <span>User-email</span>
                    </div>
                </div>





{/*             {usersData && usersData.map((user)=>(
                <div className="user-data" key={user.id}>
                    <div className="user-name">
                        <span>{user.name ?? "User-name"}</span>
                    </div>
                    <div className="user-email">
                        <span>{user.email}</span>
                    </div>
                </div>
            ))} */}
        </div>
    );
}



export default UsersList;

