import "./Start.css";
const Start = ({ onStart }: { onStart: () => void }) => {
	return (
		<>
			<section className="startSection">
				<img
					src="/start_button.png"
					alt="start"
					className="startButton"
					onClick={onStart}
				/>
			</section>
		</>
	);
};

export default Start;
