import React from "react";

const AdminPanel = (props) => {
  return (
    <div>
      <div>
        <img src={} alt="Admin dashboard graphic" className="adminBannerImg" />
        <h1>Administration Dashboard</h1>
        <hr />
        <h3>Today is: {props.currentDate}</h3>
      </div>
    </div>
  );
};

export default AdminPanel;
