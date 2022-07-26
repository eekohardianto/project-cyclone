import React from 'react';

export default function Home({ user, app_name }) {
    return (
        <div>
            <h1>{app_name}</h1>
            <p>
                My name is {user.name} you can follow me on twitter: @{user.username}
            </p>
        </div>
    );
}