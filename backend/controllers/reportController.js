exports.createReport = async (req, res) => {
  const report = await Report.create(req.body);
  res.json(report);
};
