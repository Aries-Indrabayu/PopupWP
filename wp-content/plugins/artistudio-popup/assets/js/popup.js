import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";

const Popup = () => {
	const [popups, setPopups] = useState([]);

	useEffect(() => {
		fetch("/wp-json/artistudio/v1/popup")
			.then((res) => res.json())
			.then((data) => setPopups(data));
	}, []);

	return (
		<div className="popup-container">
			{popups.map((popup, index) => (
				<div className="popup" key={index}>
					<h2>{popup.title}</h2>
					<div dangerouslySetInnerHTML={{ __html: popup.content }} />
				</div>
			))}
		</div>
	);
};

document.addEventListener("DOMContentLoaded", () => {
	ReactDOM.render(<Popup />, document.getElementById("artistudio-popup"));
});
