const Group = require("../models/SubscriptionGroup");

exports.createGroup = async (req, res) => {
  const group = await Group.create({
    ...req.body,
    owner: req.user.id,
    members: [req.user.id],
  });
  res.status(201).json(group);
};

exports.joinGroup = async (req, res) => {
  const group = await Group.findById(req.params.id);
  group.members.push(req.user.id);
  await group.save();
  res.json(group);
};
