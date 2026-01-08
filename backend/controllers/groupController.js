const Group = require("../models/SubscriptionGroup");

// 1️⃣ Create group
exports.createGroup = async (req, res) => {
  const group = await Group.create({
    ...req.body,
    owner: req.user.id,
    members: [req.user.id], // owner auto member
  });

  res.status(201).json(group);
};

// 2️⃣ Join group (Task 5 + Task 7)
exports.joinGroup = async (req, res) => {
  const group = await Group.findById(req.params.id);

  if (!group) {
    return res.status(404).json({ message: "Group not found" });
  }

  // ❌ Task 5: Prevent duplicate join
  if (group.members.includes(req.user.id)) {
    return res.status(400).json({ message: "You already joined this group" });
  }

  // ❌ Task 7: Maximum seat validation
  if (group.members.length >= group.totalSeats) {
    return res.status(400).json({ message: "Group is full" });
  }

  group.members.push(req.user.id);
  await group.save();

  res.json(group);
};

// 3️⃣ Leave group (Task 6)
exports.leaveGroup = async (req, res) => {
  const group = await Group.findById(req.params.id);

  if (!group) {
    return res.status(404).json({ message: "Group not found" });
  }

  // Owner cannot leave own group
  if (group.owner.toString() === req.user.id) {
    return res.status(400).json({ message: "Owner cannot leave the group" });
  }

  group.members = group.members.filter(
    member => member.toString() !== req.user.id
  );

  await group.save();
  res.json({ message: "Successfully left the group" });
};

// 4️⃣ Remove member (Owner only) – Task 6
exports.removeMember = async (req, res) => {
  const { memberId } = req.body;

  const group = await Group.findById(req.params.id);

  if (!group) {
    return res.status(404).json({ message: "Group not found" });
  }

  // Only owner can remove members
  if (group.owner.toString() !== req.user.id) {
    return res.status(403).json({ message: "Only owner can remove members" });
  }

  group.members = group.members.filter(
    member => member.toString() !== memberId
  );

  await group.save();
  res.json({ message: "Member removed successfully" });
};
