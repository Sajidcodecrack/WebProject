exports.verifyStudent = async (req, res) => {
  const { userId } = req.params;

  const user = await User.findByIdAndUpdate(
    userId,
    { isVerified: true },
    { new: true }
  );

  res.json({ message: "Student verified", user });
};
